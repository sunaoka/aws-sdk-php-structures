<?php

namespace Sunaoka\Aws\Structures\Redshift\DisassociateDataShareConsumer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DataShareArn
 * @property string|null $ProducerArn
 * @property bool|null $AllowPubliclyAccessibleConsumers
 * @property list<Shapes\DataShareAssociation>|null $DataShareAssociations
 * @property string|null $ManagedBy
 */
class DisassociateDataShareConsumerResponse extends Response
{
}
