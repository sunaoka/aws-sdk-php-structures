<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeDataSharesForProducer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DataShareArn
 * @property string|null $ProducerArn
 * @property bool|null $AllowPubliclyAccessibleConsumers
 * @property list<DataShareAssociation>|null $DataShareAssociations
 * @property string|null $ManagedBy
 * @property 'INTERNAL'|null $DataShareType
 */
class DataShare extends Shape
{
    /**
     * @param array{
     *     DataShareArn?: string|null,
     *     ProducerArn?: string|null,
     *     AllowPubliclyAccessibleConsumers?: bool|null,
     *     DataShareAssociations?: list<DataShareAssociation>|null,
     *     ManagedBy?: string|null,
     *     DataShareType?: 'INTERNAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
