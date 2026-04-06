<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\ListWhatsAppTemplateLibrary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property string $id
 * @property array<string, string>|null $filters
 */
class ListWhatsAppTemplateLibraryRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     id: string,
     *     filters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
