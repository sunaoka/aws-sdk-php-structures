<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\UpdateRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ruleIdentifier
 * @property string $updateToken
 * @property 'CONFIGURATION'|'INSPECTION'|null $ruleType
 * @property string|null $ruleDescription
 * @property Shapes\JsonDocument|null $configuration
 * @property bool $isPublished
 * @property string|null $clientToken
 */
class UpdateRuleRequest extends Request
{
    /**
     * @param array{
     *     ruleIdentifier: string,
     *     updateToken: string,
     *     ruleType?: 'CONFIGURATION'|'INSPECTION'|null,
     *     ruleDescription?: string|null,
     *     configuration?: Shapes\JsonDocument|null,
     *     isPublished: bool,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
