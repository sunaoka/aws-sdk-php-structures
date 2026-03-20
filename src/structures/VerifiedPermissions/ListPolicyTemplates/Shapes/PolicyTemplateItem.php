<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListPolicyTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyStoreId
 * @property string $policyTemplateId
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property \Aws\Api\DateTimeResult $lastUpdatedDate
 * @property string|null $name
 */
class PolicyTemplateItem extends Shape
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     policyTemplateId: string,
     *     description?: string|null,
     *     createdDate: \Aws\Api\DateTimeResult,
     *     lastUpdatedDate: \Aws\Api\DateTimeResult,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
