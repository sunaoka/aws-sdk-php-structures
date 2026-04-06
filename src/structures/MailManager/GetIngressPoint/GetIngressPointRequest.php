<?php

namespace Sunaoka\Aws\Structures\MailManager\GetIngressPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IngressPointId
 * @property 'EXCLUDE'|'INCLUDE'|null $IncludeTrustStoreContents
 */
class GetIngressPointRequest extends Request
{
    /**
     * @param array{
     *     IngressPointId: string,
     *     IncludeTrustStoreContents?: 'EXCLUDE'|'INCLUDE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
