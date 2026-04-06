<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConfigurationRecorder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ConfigurationRecorder $ConfigurationRecorder
 * @property list<Shapes\Tag>|null $Tags
 */
class PutConfigurationRecorderRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationRecorder: Shapes\ConfigurationRecorder,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
