<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateCustomLogSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CustomLogSourceConfiguration|null $configuration
 * @property list<string>|null $eventClasses
 * @property string $sourceName
 * @property string|null $sourceVersion
 */
class CreateCustomLogSourceRequest extends Request
{
    /**
     * @param array{
     *     configuration?: Shapes\CustomLogSourceConfiguration|null,
     *     eventClasses?: list<string>|null,
     *     sourceName: string,
     *     sourceVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
