<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property Shapes\RuleDetail|null $detail
 * @property string $domainIdentifier
 * @property string $identifier
 * @property bool|null $includeChildDomainUnits
 * @property string|null $name
 * @property Shapes\RuleScope|null $scope
 */
class UpdateRuleRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     detail?: Shapes\RuleDetail|null,
     *     domainIdentifier: string,
     *     identifier: string,
     *     includeChildDomainUnits?: bool|null,
     *     name?: string|null,
     *     scope?: Shapes\RuleScope|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
