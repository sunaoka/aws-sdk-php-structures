<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetAwsOpportunitySummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWSSalesRep'|'AWSAccountOwner'|'WWPSPDM'|'PDM'|'PSM'|'ISVSM'|null $BusinessTitle
 * @property string|null $Email
 * @property string|null $FirstName
 * @property string|null $LastName
 */
class AwsTeamMember extends Shape
{
    /**
     * @param array{
     *     BusinessTitle?: 'AWSSalesRep'|'AWSAccountOwner'|'WWPSPDM'|'PDM'|'PSM'|'ISVSM'|null,
     *     Email?: string|null,
     *     FirstName?: string|null,
     *     LastName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
