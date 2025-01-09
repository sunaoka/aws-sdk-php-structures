<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BETWEEN' $Amplitude
 * @property 'PROJECTION'|'BETWEEN'|'EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP' $Datadog
 * @property 'PROJECTION'|'BETWEEN'|'EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP' $Dynatrace
 * @property 'PROJECTION'|'BETWEEN' $GoogleAnalytics
 * @property 'PROJECTION'|'BETWEEN'|'EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP' $InforNexus
 * @property 'PROJECTION'|'LESS_THAN'|'GREATER_THAN'|'BETWEEN'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP' $Marketo
 * @property 'PROJECTION'|'LESS_THAN'|'GREATER_THAN'|'BETWEEN'|'LESS_THAN_OR_EQUAL_TO'|'GREATER_THAN_OR_EQUAL_TO'|'EQUAL_TO'|'NOT_EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP' $S3
 * @property 'PROJECTION'|'LESS_THAN'|'CONTAINS'|'GREATER_THAN'|'BETWEEN'|'LESS_THAN_OR_EQUAL_TO'|'GREATER_THAN_OR_EQUAL_TO'|'EQUAL_TO'|'NOT_EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP' $Salesforce
 * @property 'PROJECTION'|'CONTAINS'|'LESS_THAN'|'GREATER_THAN'|'BETWEEN'|'LESS_THAN_OR_EQUAL_TO'|'GREATER_THAN_OR_EQUAL_TO'|'EQUAL_TO'|'NOT_EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP' $ServiceNow
 * @property 'PROJECTION'|'EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP' $Singular
 * @property 'PROJECTION'|'LESS_THAN'|'GREATER_THAN'|'BETWEEN'|'LESS_THAN_OR_EQUAL_TO'|'GREATER_THAN_OR_EQUAL_TO'|'EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP' $Slack
 * @property 'PROJECTION'|'EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP' $Trendmicro
 * @property 'PROJECTION'|'LESS_THAN'|'GREATER_THAN'|'CONTAINS'|'BETWEEN'|'LESS_THAN_OR_EQUAL_TO'|'GREATER_THAN_OR_EQUAL_TO'|'EQUAL_TO'|'NOT_EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP' $Veeva
 * @property 'PROJECTION'|'GREATER_THAN'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP' $Zendesk
 * @property 'PROJECTION'|'LESS_THAN'|'CONTAINS'|'GREATER_THAN'|'BETWEEN'|'LESS_THAN_OR_EQUAL_TO'|'GREATER_THAN_OR_EQUAL_TO'|'EQUAL_TO'|'NOT_EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP' $SAPOData
 * @property 'PROJECTION'|'LESS_THAN'|'GREATER_THAN'|'CONTAINS'|'BETWEEN'|'LESS_THAN_OR_EQUAL_TO'|'GREATER_THAN_OR_EQUAL_TO'|'EQUAL_TO'|'NOT_EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP' $CustomConnector
 * @property 'PROJECTION'|'EQUAL_TO'|'NO_OP'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC' $Pardot
 */
class ConnectorOperator extends Shape
{
    /**
     * @param array{
     *     Amplitude?: 'BETWEEN',
     *     Datadog?: 'PROJECTION'|'BETWEEN'|'EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP',
     *     Dynatrace?: 'PROJECTION'|'BETWEEN'|'EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP',
     *     GoogleAnalytics?: 'PROJECTION'|'BETWEEN',
     *     InforNexus?: 'PROJECTION'|'BETWEEN'|'EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP',
     *     Marketo?: 'PROJECTION'|'LESS_THAN'|'GREATER_THAN'|'BETWEEN'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP',
     *     S3?: 'PROJECTION'|'LESS_THAN'|'GREATER_THAN'|'BETWEEN'|'LESS_THAN_OR_EQUAL_TO'|'GREATER_THAN_OR_EQUAL_TO'|'EQUAL_TO'|'NOT_EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP',
     *     Salesforce?: 'PROJECTION'|'LESS_THAN'|'CONTAINS'|'GREATER_THAN'|'BETWEEN'|'LESS_THAN_OR_EQUAL_TO'|'GREATER_THAN_OR_EQUAL_TO'|'EQUAL_TO'|'NOT_EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP',
     *     ServiceNow?: 'PROJECTION'|'CONTAINS'|'LESS_THAN'|'GREATER_THAN'|'BETWEEN'|'LESS_THAN_OR_EQUAL_TO'|'GREATER_THAN_OR_EQUAL_TO'|'EQUAL_TO'|'NOT_EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP',
     *     Singular?: 'PROJECTION'|'EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP',
     *     Slack?: 'PROJECTION'|'LESS_THAN'|'GREATER_THAN'|'BETWEEN'|'LESS_THAN_OR_EQUAL_TO'|'GREATER_THAN_OR_EQUAL_TO'|'EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP',
     *     Trendmicro?: 'PROJECTION'|'EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP',
     *     Veeva?: 'PROJECTION'|'LESS_THAN'|'GREATER_THAN'|'CONTAINS'|'BETWEEN'|'LESS_THAN_OR_EQUAL_TO'|'GREATER_THAN_OR_EQUAL_TO'|'EQUAL_TO'|'NOT_EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP',
     *     Zendesk?: 'PROJECTION'|'GREATER_THAN'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP',
     *     SAPOData?: 'PROJECTION'|'LESS_THAN'|'CONTAINS'|'GREATER_THAN'|'BETWEEN'|'LESS_THAN_OR_EQUAL_TO'|'GREATER_THAN_OR_EQUAL_TO'|'EQUAL_TO'|'NOT_EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP',
     *     CustomConnector?: 'PROJECTION'|'LESS_THAN'|'GREATER_THAN'|'CONTAINS'|'BETWEEN'|'LESS_THAN_OR_EQUAL_TO'|'GREATER_THAN_OR_EQUAL_TO'|'EQUAL_TO'|'NOT_EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP',
     *     Pardot?: 'PROJECTION'|'EQUAL_TO'|'NO_OP'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
