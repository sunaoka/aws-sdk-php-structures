<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreateAnalyzer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerName
 * @property 'ACCOUNT'|'ORGANIZATION'|'ACCOUNT_UNUSED_ACCESS'|'ORGANIZATION_UNUSED_ACCESS' $type
 * @property list<Shapes\InlineArchiveRule>|null $archiveRules
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 * @property Shapes\AnalyzerConfiguration|null $configuration
 */
class CreateAnalyzerRequest extends Request
{
    /**
     * @param array{
     *     analyzerName: string,
     *     type: 'ACCOUNT'|'ORGANIZATION'|'ACCOUNT_UNUSED_ACCESS'|'ORGANIZATION_UNUSED_ACCESS',
     *     archiveRules?: list<Shapes\InlineArchiveRule>|null,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null,
     *     configuration?: Shapes\AnalyzerConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
