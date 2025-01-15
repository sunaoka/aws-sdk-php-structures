<?php

namespace Sunaoka\Aws\Structures\Redshift\AssociateDataShareConsumer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DataShareArn
 * @property string|null $ProducerArn
 * @property bool|null $AllowPubliclyAccessibleConsumers
 * @property list<Shapes\DataShareAssociation>|null $DataShareAssociations
 * @property string|null $ManagedBy
 * @property 'INTERNAL'|null $DataShareType
 */
class AssociateDataShareConsumerResponse extends Response
{
}
