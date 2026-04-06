<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\GetOrder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $automaticRenewal
 * @property 'SIXTY_DAYS'|'ONE_YEAR'|'THREE_YEARS' $commitmentLength
 */
class CommitmentConfiguration extends Shape
{
    /**
     * @param array{
     *     automaticRenewal: bool,
     *     commitmentLength: 'SIXTY_DAYS'|'ONE_YEAR'|'THREE_YEARS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
