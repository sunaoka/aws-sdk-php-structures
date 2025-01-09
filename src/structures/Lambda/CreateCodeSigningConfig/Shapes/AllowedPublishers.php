<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateCodeSigningConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SigningProfileVersionArns
 */
class AllowedPublishers extends Shape
{
    /**
     * @param array{SigningProfileVersionArns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
