<?php

namespace Sunaoka\Aws\Structures\ElementalInference\GetFixture;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fixtureId
 */
class GetFixtureRequest extends Request
{
    /**
     * @param array{fixtureId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
