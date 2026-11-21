<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'advertising'|'archiver'|'content_fetcher'|'email_client'|'http_library'|'link_checker'|'miscellaneous'|'monitoring'|'page_preview'|'scraping_framework'|'search_engine'|'security'|'seo'|'social_media'|'ai_training'|'ai_search'|'ai_assistant'|'ai_content_optimization'|null $optionalValue
 */
class UpdatedBotCategory extends Shape
{
    /**
     * @param array{optionalValue?: 'advertising'|'archiver'|'content_fetcher'|'email_client'|'http_library'|'link_checker'|'miscellaneous'|'monitoring'|'page_preview'|'scraping_framework'|'search_engine'|'security'|'seo'|'social_media'|'ai_training'|'ai_search'|'ai_assistant'|'ai_content_optimization'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
