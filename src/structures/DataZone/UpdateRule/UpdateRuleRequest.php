<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property Shapes\RuleDetail $detail
 * @property string $domainIdentifier
 * @property string $identifier
 * @property bool $includeChildDomainUnits
 * @property string $name
 * @property Shapes\RuleScope $scope
 */
class UpdateRuleRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     detail?: Shapes\RuleDetail,
     *     domainIdentifier: string,
     *     identifier: string,
     *     includeChildDomainUnits?: bool,
     *     name?: string,
     *     scope?: Shapes\RuleScope
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
