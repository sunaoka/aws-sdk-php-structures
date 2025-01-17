<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\StartEngagementFromOpportunityTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AwsSubmission $AwsSubmission
 * @property string $Catalog
 * @property string $ClientToken
 * @property string $Identifier
 * @property list<Shapes\Tag>|null $Tags
 */
class StartEngagementFromOpportunityTaskRequest extends Request
{
    /**
     * @param array{
     *     AwsSubmission: Shapes\AwsSubmission,
     *     Catalog: string,
     *     ClientToken: string,
     *     Identifier: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
