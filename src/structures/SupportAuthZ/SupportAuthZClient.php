<?php

namespace Sunaoka\Aws\Structures\SupportAuthZ;

class SupportAuthZClient extends \Aws\SupportAuthZ\SupportAuthZClient
{
    use CreateSupportPermit\CreateSupportPermitTrait;
    use DeleteSupportPermit\DeleteSupportPermitTrait;
    use GetAction\GetActionTrait;
    use GetSupportPermit\GetSupportPermitTrait;
    use ListActions\ListActionsTrait;
    use ListSupportPermitRequests\ListSupportPermitRequestsTrait;
    use ListSupportPermits\ListSupportPermitsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RejectSupportPermitRequest\RejectSupportPermitRequestTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
