<?php

namespace Sunaoka\Aws\Structures\Proton\CreateEnvironmentTemplateVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property string $majorVersion
 * @property Shapes\TemplateVersionSourceInput $source
 * @property list<Shapes\Tag> $tags
 * @property string $templateName
 */
class CreateEnvironmentTemplateVersionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     majorVersion?: string,
     *     source: Shapes\TemplateVersionSourceInput,
     *     tags?: list<Shapes\Tag>,
     *     templateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
