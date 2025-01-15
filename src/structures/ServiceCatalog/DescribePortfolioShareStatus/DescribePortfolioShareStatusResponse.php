<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribePortfolioShareStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $PortfolioShareToken
 * @property string|null $PortfolioId
 * @property string|null $OrganizationNodeValue
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'ERROR'|null $Status
 * @property Shapes\ShareDetails|null $ShareDetails
 */
class DescribePortfolioShareStatusResponse extends Response
{
}
