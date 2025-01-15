<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainId
 * @property string $DomainName
 * @property string|null $ARN
 * @property bool|null $Created
 * @property bool|null $Deleted
 * @property ServiceEndpoint|null $DocService
 * @property ServiceEndpoint|null $SearchService
 * @property bool $RequiresIndexDocuments
 * @property bool|null $Processing
 * @property string|null $SearchInstanceType
 * @property int<1, max>|null $SearchPartitionCount
 * @property int<1, max>|null $SearchInstanceCount
 * @property Limits|null $Limits
 */
class DomainStatus extends Shape
{
    /**
     * @param array{
     *     DomainId: string,
     *     DomainName: string,
     *     ARN?: string|null,
     *     Created?: bool|null,
     *     Deleted?: bool|null,
     *     DocService?: ServiceEndpoint|null,
     *     SearchService?: ServiceEndpoint|null,
     *     RequiresIndexDocuments: bool,
     *     Processing?: bool|null,
     *     SearchInstanceType?: string|null,
     *     SearchPartitionCount?: int<1, max>|null,
     *     SearchInstanceCount?: int<1, max>|null,
     *     Limits?: Limits|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
