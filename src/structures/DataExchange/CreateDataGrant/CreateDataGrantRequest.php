<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateDataGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'AWS_ORGANIZATION'|'NONE' $GrantDistributionScope
 * @property string $ReceiverPrincipal
 * @property string $SourceDataSetId
 * @property \Aws\Api\DateTimeResult $EndsAt
 * @property string $Description
 * @property array<string, string> $Tags
 */
class CreateDataGrantRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     GrantDistributionScope: 'AWS_ORGANIZATION'|'NONE',
     *     ReceiverPrincipal: string,
     *     SourceDataSetId: string,
     *     EndsAt?: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
