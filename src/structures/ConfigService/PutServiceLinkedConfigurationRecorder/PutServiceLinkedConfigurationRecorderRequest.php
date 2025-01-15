<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutServiceLinkedConfigurationRecorder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServicePrincipal
 * @property list<Shapes\Tag>|null $Tags
 */
class PutServiceLinkedConfigurationRecorderRequest extends Request
{
    /**
     * @param array{
     *     ServicePrincipal: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
