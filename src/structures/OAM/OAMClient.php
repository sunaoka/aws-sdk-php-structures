<?php

namespace Sunaoka\Aws\Structures\OAM;

class OAMClient extends \Aws\OAM\OAMClient
{
    use CreateLink\CreateLinkTrait;
    use CreateSink\CreateSinkTrait;
    use DeleteLink\DeleteLinkTrait;
    use DeleteSink\DeleteSinkTrait;
    use GetLink\GetLinkTrait;
    use GetSink\GetSinkTrait;
    use GetSinkPolicy\GetSinkPolicyTrait;
    use ListAttachedLinks\ListAttachedLinksTrait;
    use ListLinks\ListLinksTrait;
    use ListSinks\ListSinksTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutSinkPolicy\PutSinkPolicyTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateLink\UpdateLinkTrait;
}
