<?php

namespace Sunaoka\Aws\Structures\Backup\CreateTieringConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TieringConfigurationInputForCreate $TieringConfiguration
 * @property array<string, string>|null $TieringConfigurationTags
 * @property string|null $CreatorRequestId
 */
class CreateTieringConfigurationRequest extends Request
{
    /**
     * @param array{
     *     TieringConfiguration: Shapes\TieringConfigurationInputForCreate,
     *     TieringConfigurationTags?: array<string, string>|null,
     *     CreatorRequestId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
