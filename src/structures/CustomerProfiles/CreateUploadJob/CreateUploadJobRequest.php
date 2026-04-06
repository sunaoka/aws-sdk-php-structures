<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateUploadJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $DisplayName
 * @property array<string, Shapes\ObjectTypeField> $Fields
 * @property string $UniqueKey
 * @property int<1, 1098>|null $DataExpiry
 */
class CreateUploadJobRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     DisplayName: string,
     *     Fields: array<string, Shapes\ObjectTypeField>,
     *     UniqueKey: string,
     *     DataExpiry?: int<1, 1098>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
