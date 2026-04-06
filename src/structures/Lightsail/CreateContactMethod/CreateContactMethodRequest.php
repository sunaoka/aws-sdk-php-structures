<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateContactMethod;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Email'|'SMS' $protocol
 * @property string $contactEndpoint
 * @property list<Shapes\Tag>|null $tags
 */
class CreateContactMethodRequest extends Request
{
    /**
     * @param array{
     *     protocol: 'Email'|'SMS',
     *     contactEndpoint: string,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
