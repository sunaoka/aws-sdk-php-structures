<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCodeSecurityIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $integrationArn
 * @property array<string, string>|null $tags
 */
class GetCodeSecurityIntegrationRequest extends Request
{
    /**
     * @param array{
     *     integrationArn: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
