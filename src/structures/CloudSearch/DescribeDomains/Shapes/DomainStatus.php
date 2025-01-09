<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainId
 * @property string $DomainName
 * @property string $ARN
 * @property bool $Created
 * @property bool $Deleted
 * @property ServiceEndpoint $DocService
 * @property ServiceEndpoint $SearchService
 * @property bool $RequiresIndexDocuments
 * @property bool $Processing
 * @property string $SearchInstanceType
 * @property int $SearchPartitionCount
 * @property int $SearchInstanceCount
 * @property Limits $Limits
 */
class DomainStatus extends Shape
{
    /**
     * @param array{
     *     DomainId: string,
     *     DomainName: string,
     *     ARN?: string,
     *     Created?: bool,
     *     Deleted?: bool,
     *     DocService?: ServiceEndpoint,
     *     SearchService?: ServiceEndpoint,
     *     RequiresIndexDocuments: bool,
     *     Processing?: bool,
     *     SearchInstanceType?: string,
     *     SearchPartitionCount?: int,
     *     SearchInstanceCount?: int,
     *     Limits?: Limits
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
