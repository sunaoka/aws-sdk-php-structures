<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\UpdateSystem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $systemArn
 * @property string|null $description
 * @property bool|null $sharingEnabled
 */
class UpdateSystemRequest extends Request
{
    /**
     * @param array{
     *     systemArn: string,
     *     description?: string|null,
     *     sharingEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
