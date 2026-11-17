<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateAgentBasicProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Tag>|null $tags
 */
class CreateAgentBasicProfileRequest extends Request
{
    /**
     * @param array{tags?: list<Shapes\Tag>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
