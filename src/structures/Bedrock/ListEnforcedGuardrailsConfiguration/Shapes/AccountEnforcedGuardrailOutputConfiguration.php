<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListEnforcedGuardrailsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $configId
 * @property string|null $guardrailArn
 * @property string|null $guardrailId
 * @property 'HONOR'|'IGNORE'|null $inputTags
 * @property string|null $guardrailVersion
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property 'ACCOUNT'|null $owner
 */
class AccountEnforcedGuardrailOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     configId?: string|null,
     *     guardrailArn?: string|null,
     *     guardrailId?: string|null,
     *     inputTags?: 'HONOR'|'IGNORE'|null,
     *     guardrailVersion?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null,
     *     owner?: 'ACCOUNT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
