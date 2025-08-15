<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DeleteScraper;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scraperId
 * @property string|null $clientToken
 */
class DeleteScraperRequest extends Request
{
    /**
     * @param array{
     *     scraperId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
