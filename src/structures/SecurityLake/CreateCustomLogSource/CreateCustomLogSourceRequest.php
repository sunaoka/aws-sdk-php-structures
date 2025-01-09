<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateCustomLogSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CustomLogSourceConfiguration $configuration
 * @property list<string> $eventClasses
 * @property string $sourceName
 * @property string $sourceVersion
 */
class CreateCustomLogSourceRequest extends Request
{
    /**
     * @param array{
     *     configuration: Shapes\CustomLogSourceConfiguration,
     *     eventClasses?: list<string>,
     *     sourceName: string,
     *     sourceVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
