<?php

namespace Sunaoka\Aws\Structures\Proton\CreateEnvironmentTemplateVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property string|null $majorVersion
 * @property Shapes\TemplateVersionSourceInput $source
 * @property list<Shapes\Tag>|null $tags
 * @property string $templateName
 */
class CreateEnvironmentTemplateVersionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     majorVersion?: string|null,
     *     source: Shapes\TemplateVersionSourceInput,
     *     tags?: list<Shapes\Tag>|null,
     *     templateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
