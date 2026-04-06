<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\StartEngagementFromOpportunityTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $ClientToken
 * @property string $Identifier
 * @property Shapes\AwsSubmission $AwsSubmission
 * @property list<Shapes\Tag>|null $Tags
 */
class StartEngagementFromOpportunityTaskRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ClientToken: string,
     *     Identifier: string,
     *     AwsSubmission: Shapes\AwsSubmission,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
