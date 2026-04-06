<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DeleteScraper;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $scraperId
 */
class DeleteScraperRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     scraperId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
