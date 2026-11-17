<?php

namespace Sunaoka\Aws\Structures\Health\ConfigureTagsForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\TagKeyForOrganization> $tagKeys
 */
class ConfigureTagsForOrganizationRequest extends Request
{
    /**
     * @param array{tagKeys: list<Shapes\TagKeyForOrganization>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
