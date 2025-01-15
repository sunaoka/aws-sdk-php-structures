<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\CreateScan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Security'|'All'|null $analysisType
 * @property string|null $clientToken
 * @property Shapes\ResourceId $resourceId
 * @property string $scanName
 * @property 'Standard'|'Express'|null $scanType
 * @property array<string, string>|null $tags
 */
class CreateScanRequest extends Request
{
    /**
     * @param array{
     *     analysisType?: 'Security'|'All'|null,
     *     clientToken?: string|null,
     *     resourceId: Shapes\ResourceId,
     *     scanName: string,
     *     scanType?: 'Standard'|'Express'|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
