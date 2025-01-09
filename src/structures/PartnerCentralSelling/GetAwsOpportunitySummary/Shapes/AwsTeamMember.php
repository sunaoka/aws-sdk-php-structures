<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetAwsOpportunitySummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWSSalesRep'|'AWSAccountOwner'|'WWPSPDM'|'PDM'|'PSM'|'ISVSM' $BusinessTitle
 * @property string $Email
 * @property string $FirstName
 * @property string $LastName
 */
class AwsTeamMember extends Shape
{
    /**
     * @param array{
     *     BusinessTitle?: 'AWSSalesRep'|'AWSAccountOwner'|'WWPSPDM'|'PDM'|'PSM'|'ISVSM',
     *     Email?: string,
     *     FirstName?: string,
     *     LastName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
