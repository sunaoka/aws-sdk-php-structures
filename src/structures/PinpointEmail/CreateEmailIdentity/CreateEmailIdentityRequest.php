<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\CreateEmailIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailIdentity
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateEmailIdentityRequest extends Request
{
    /**
     * @param array{
     *     EmailIdentity: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
