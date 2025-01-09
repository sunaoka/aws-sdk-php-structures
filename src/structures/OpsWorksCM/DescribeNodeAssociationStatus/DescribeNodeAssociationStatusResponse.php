<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\DescribeNodeAssociationStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'SUCCESS'|'FAILED'|'IN_PROGRESS' $NodeAssociationStatus
 * @property list<Shapes\EngineAttribute> $EngineAttributes
 */
class DescribeNodeAssociationStatusResponse extends Response
{
}
