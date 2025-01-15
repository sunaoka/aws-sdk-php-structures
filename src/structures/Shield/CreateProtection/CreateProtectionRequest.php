<?php

namespace Sunaoka\Aws\Structures\Shield\CreateProtection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $ResourceArn
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateProtectionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ResourceArn: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
