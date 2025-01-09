<?php

namespace Sunaoka\Aws\Structures\Route53\ChangeResourceRecordSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostedZoneId
 * @property Shapes\ChangeBatch $ChangeBatch
 */
class ChangeResourceRecordSetsRequest extends Request
{
    /**
     * @param array{
     *     HostedZoneId: string,
     *     ChangeBatch: Shapes\ChangeBatch
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
