<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\DescribeNodeAssociationStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'SUCCESS'|'FAILED'|'IN_PROGRESS'|null $NodeAssociationStatus
 * @property list<Shapes\EngineAttribute>|null $EngineAttributes
 */
class DescribeNodeAssociationStatusResponse extends Response
{
}
