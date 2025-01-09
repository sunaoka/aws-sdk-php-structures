<?php

namespace Sunaoka\Aws\Structures\ECRPublic\DescribeRegistries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $registryId
 * @property string $registryArn
 * @property string $registryUri
 * @property bool $verified
 * @property list<RegistryAlias> $aliases
 */
class Registry extends Shape
{
    /**
     * @param array{
     *     registryId: string,
     *     registryArn: string,
     *     registryUri: string,
     *     verified: bool,
     *     aliases: list<RegistryAlias>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
