<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService;

class LexRuntimeServiceClient extends \Aws\LexRuntimeService\LexRuntimeServiceClient
{
    use DeleteSession\DeleteSessionTrait;
    use GetSession\GetSessionTrait;
    use PostContent\PostContentTrait;
    use PostText\PostTextTrait;
    use PutSession\PutSessionTrait;
}
