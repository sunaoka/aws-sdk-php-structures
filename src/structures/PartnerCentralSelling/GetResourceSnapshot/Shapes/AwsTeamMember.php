<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetResourceSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Email
 * @property string|null $FirstName
 * @property string|null $LastName
 * @property 'AWSSalesRep'|'AWSAccountOwner'|'WWPSPDM'|'PDM'|'PSM'|'ISVSM'|null $BusinessTitle
 */
class AwsTeamMember extends Shape
{
    /**
     * @param array{
     *     Email?: string|null,
     *     FirstName?: string|null,
     *     LastName?: string|null,
     *     BusinessTitle?: 'AWSSalesRep'|'AWSAccountOwner'|'WWPSPDM'|'PDM'|'PSM'|'ISVSM'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
