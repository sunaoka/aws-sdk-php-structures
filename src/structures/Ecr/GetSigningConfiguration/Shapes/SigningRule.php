<?php

namespace Sunaoka\Aws\Structures\Ecr\GetSigningConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $signingProfileArn
 * @property list<SigningRepositoryFilter>|null $repositoryFilters
 */
class SigningRule extends Shape
{
    /**
     * @param array{
     *     signingProfileArn: string,
     *     repositoryFilters?: list<SigningRepositoryFilter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
