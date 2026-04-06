<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string|null $name
 * @property string|null $description
 * @property Shapes\RuleScope|null $scope
 * @property Shapes\RuleDetail|null $detail
 * @property bool|null $includeChildDomainUnits
 */
class UpdateRuleRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     name?: string|null,
     *     description?: string|null,
     *     scope?: Shapes\RuleScope|null,
     *     detail?: Shapes\RuleDetail|null,
     *     includeChildDomainUnits?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
