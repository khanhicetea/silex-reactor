# It's over 9000 !!!

```bash
$ ab -n 10000 -c 10 http://127.0.0.1:8080/hello/khanh
This is ApacheBench, Version 2.3 <$Revision: 1706008 $>
Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
Licensed to The Apache Software Foundation, http://www.apache.org/

Benchmarking 127.0.0.1 (be patient)
Completed 1000 requests
Completed 2000 requests
Completed 3000 requests
Completed 4000 requests
Completed 5000 requests
Completed 6000 requests
Completed 7000 requests
Completed 8000 requests
Completed 9000 requests
Completed 10000 requests
Finished 10000 requests


Server Software:        
Server Hostname:        127.0.0.1
Server Port:            8080

Document Path:          /hello/khanh
Document Length:        11 bytes

Concurrency Level:      10
Time taken for tests:   1.432 seconds
Complete requests:      10000
Failed requests:        0
Total transferred:      1510000 bytes
HTML transferred:       110000 bytes
Requests per second:    6985.15 [#/sec] (mean)
Time per request:       1.432 [ms] (mean)
Time per request:       0.143 [ms] (mean, across all concurrent requests)
Transfer rate:          1030.04 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0    0   0.1      0       3
Processing:     0    1   0.6      1       9
Waiting:        0    1   0.6      1       9
Total:          0    1   0.6      1       9

Percentage of the requests served within a certain time (ms)
  50%      1
  66%      2
  75%      2
  80%      2
  90%      2
  95%      2
  98%      3
  99%      3
 100%      9 (longest request)
```
