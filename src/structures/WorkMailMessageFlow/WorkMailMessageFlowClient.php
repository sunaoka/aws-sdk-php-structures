<?php

namespace Sunaoka\Aws\Structures\WorkMailMessageFlow;

class WorkMailMessageFlowClient extends \Aws\WorkMailMessageFlow\WorkMailMessageFlowClient
{
    use GetRawMessageContent\GetRawMessageContentTrait;
    use PutRawMessageContent\PutRawMessageContentTrait;
}
