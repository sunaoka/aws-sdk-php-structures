<?php

namespace Sunaoka\Aws\Structures\Redshift\AssociateDataShareConsumer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DataShareArn
 * @property string $ProducerArn
 * @property bool $AllowPubliclyAccessibleConsumers
 * @property list<Shapes\DataShareAssociation> $DataShareAssociations
 * @property string $ManagedBy
 * @property 'INTERNAL' $DataShareType
 */
class AssociateDataShareConsumerResponse extends Response
{
}
