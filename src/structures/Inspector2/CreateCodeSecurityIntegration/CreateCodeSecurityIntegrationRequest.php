<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateCodeSecurityIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property 'GITLAB_SELF_MANAGED'|'GITHUB' $type
 * @property Shapes\CreateIntegrationDetail|null $details
 * @property array<string, string>|null $tags
 */
class CreateCodeSecurityIntegrationRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     type: 'GITLAB_SELF_MANAGED'|'GITHUB',
     *     details?: Shapes\CreateIntegrationDetail|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
