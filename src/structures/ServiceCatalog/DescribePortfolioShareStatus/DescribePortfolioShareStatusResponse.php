<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribePortfolioShareStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $PortfolioShareToken
 * @property string $PortfolioId
 * @property string $OrganizationNodeValue
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'ERROR' $Status
 * @property Shapes\ShareDetails $ShareDetails
 */
class DescribePortfolioShareStatusResponse extends Response
{
}
