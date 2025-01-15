<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferSNOMEDCT;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SNOMEDCTEntity> $Entities
 * @property string|null $PaginationToken
 * @property string|null $ModelVersion
 * @property Shapes\SNOMEDCTDetails|null $SNOMEDCTDetails
 * @property Shapes\Characters|null $Characters
 */
class InferSNOMEDCTResponse extends Response
{
}
