<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateDataGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'AWS_ORGANIZATION'|'NONE' $GrantDistributionScope
 * @property string $ReceiverPrincipal
 * @property string $SourceDataSetId
 * @property \Aws\Api\DateTimeResult|null $EndsAt
 * @property string|null $Description
 * @property array<string, string>|null $Tags
 */
class CreateDataGrantRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     GrantDistributionScope: 'AWS_ORGANIZATION'|'NONE',
     *     ReceiverPrincipal: string,
     *     SourceDataSetId: string,
     *     EndsAt?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
