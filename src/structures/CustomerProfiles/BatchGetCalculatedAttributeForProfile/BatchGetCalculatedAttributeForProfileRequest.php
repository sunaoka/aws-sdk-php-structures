<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\BatchGetCalculatedAttributeForProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CalculatedAttributeName
 * @property string $DomainName
 * @property list<string> $ProfileIds
 * @property Shapes\ConditionOverrides|null $ConditionOverrides
 */
class BatchGetCalculatedAttributeForProfileRequest extends Request
{
    /**
     * @param array{
     *     CalculatedAttributeName: string,
     *     DomainName: string,
     *     ProfileIds: list<string>,
     *     ConditionOverrides?: Shapes\ConditionOverrides|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
