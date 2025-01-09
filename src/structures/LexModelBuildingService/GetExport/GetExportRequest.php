<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $version
 * @property 'BOT'|'INTENT'|'SLOT_TYPE' $resourceType
 * @property 'ALEXA_SKILLS_KIT'|'LEX' $exportType
 */
class GetExportRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     version: string,
     *     resourceType: 'BOT'|'INTENT'|'SLOT_TYPE',
     *     exportType: 'ALEXA_SKILLS_KIT'|'LEX'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
