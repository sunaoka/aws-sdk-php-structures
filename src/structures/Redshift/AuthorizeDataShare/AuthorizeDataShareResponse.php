<?php

namespace Sunaoka\Aws\Structures\Redshift\AuthorizeDataShare;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DataShareArn
 * @property string $ProducerArn
 * @property bool $AllowPubliclyAccessibleConsumers
 * @property list<Shapes\DataShareAssociation> $DataShareAssociations
 * @property string $ManagedBy
 * @property 'INTERNAL' $DataShareType
 */
class AuthorizeDataShareResponse extends Response
{
}
